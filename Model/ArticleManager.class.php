<?php

class ArticleManager
{
    private $db;

    public function __construct(PDO $connect)
    {

        $this->db = $connect;
    }

    public function listArticle(){

        # aaa038 - recup all articles without author at the moment
        // $get = $this->db->query("SELECT a.* FROM article a ORDER BY a.thedate DESC;");

        # aaa060 - replace a38 recup all articles with JOIN author
        $get = $this->db->query("SELECT * FROM article");

        # aaa039 => one or more result
        if($get->rowCount()){

            # aaa041 - return array assoc's in array index
            
            return $get->fetchAll(PDO::FETCH_ASSOC);

        }else{
            # aaa040 => no result => return false
            return false;
        }
    }
    public function listArticleCateg(int $id){

        $get = $this->db->query("SELECT a.*,
          u.idauthor,u.thelogin,u.thename, c.thecategtitle, c.idcategory
          FROM article a INNER JOIN author u 
            ON a.authoridauthor = u.idauthor INNER JOIN category c ON a.categoryidcategory = c.idcategory
          WHERE c.idcategory ='$id';");

        # aaa039 => one or more result
        if($get->rowCount()){

            # aaa041 - return array assoc's in array index
            return $get->fetchAll(PDO::FETCH_ASSOC);

        }else{
            # aaa040 => no result => return false
            return false;
        }
    }
    # aaa063 get one article
    public function oneArticle(int $id){
        $sql = "SELECT * FROM article WHERE idarticle = ?";
        $request = $this->db->prepare($sql);
        $request->bindValue(1,$id,PDO::PARAM_INT);
        $request->execute();
        if($request->rowCount()){
            return $request->fetch(PDO::FETCH_ASSOC);
        }else{
            return false;
        }
    }

    # aaa103 list all articles by idauthor
    public function listArticleauthor(int $idauthor){

        $get = $this->db->query("SELECT a.*,
          u.idauthor,u.thelogin,u.thename,c.thecategtitle, c.idcategory
          FROM article a INNER JOIN author u 
            ON a.authoridauthor = u.idauthor INNER JOIN category c ON a.categoryidcategory = c.idcategory
          WHERE u.idauthor = $idauthor
          ORDER BY a.thedate DESC;");

        # aaa104 => one or more result
        if($get->rowCount()){

            # aaa105 - return array assoc's in array index
            return $get->fetchAll(PDO::FETCH_ASSOC);

        }else{
            # aaa106 => no result => return false
            return false;
        }
    }

    # aaa094 Create (Crud)
    public function createArticle(Article $datas){
        # aaa100 if the idauthor is the same as authoridauthor
        if($datas->getAuthoridauthor()==$_SESSION['idauthor']){

            $sql = "INSERT INTO article (thetitle,thetext,thedate,authoridauthor,categoryidcategory) VALUES (?,?,?,?,?)";

            $post = $this->db->prepare($sql);

            $post->bindValue(1,$datas->getThetitle(),PDO::PARAM_STR);
            $post->bindValue(2,$datas->getThetext(),PDO::PARAM_STR);
            $post->bindValue(3,$datas->getThedate(),PDO::PARAM_STR);
            $post->bindValue(4,$datas->getAuthoridauthor(),PDO::PARAM_INT);
            $post->bindValue(5,$datas->getCategoryidcategory(),PDO::PARAM_INT);

            $post->execute();

            if($post->rowCount()){
                return true;
            }
            return false;
        }else{
            return false;
        }
    }
    
    # aaa119 update article (crUd)
    public function updateArticle(Article $newDatas, int $getIdArticle){
       
            if($newDatas->getIdarticle()==$getIdArticle){
                # aaa122 prepare update
                $sql = "UPDATE article SET thetitle=?, thetext=?, thedate=?  WHERE idarticle=?";
                $update = $this->db->prepare($sql);
                # aaa123 execute with array for replace bindValue or bindParam without type verification
                $update->execute(
                        [
                            $newDatas->getThetitle(),
                            $newDatas->getThetext(),
                            $newDatas->getThedate(),
                            $newDatas->getIdarticle()
                            
                        ]);
                # aaa124 if update ok
                if($update->rowCount()){
                    return true;
                }else{
                    return false;
                }
                
            }else{
                return false;
            }
    
    }
    
    # aaa128 Delete Article (cruD)
    public function deleteArticle(Article $id){
        # aaa129 perpare delete if authoridauthor is the same in SESSION
        $sql = "DELETE FROM article WHERE idarticle=? AND authoridauthor=?";
        $del = $this->db->prepare($sql);
        $del->bindValue(1, $id->getIdarticle(),PDO::PARAM_INT);
        # aaa130 permission user to delete his article
        $del->bindValue(2, $_SESSION['idauthor'],PDO::PARAM_INT);
        $del->execute();
        if($del->rowCount()){
            return true;
        }else{
            return false;
        }
    }

}