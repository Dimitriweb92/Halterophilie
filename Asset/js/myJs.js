/* 
 * # aaa126 JS
 */
function Delete(ID){
    if(confirm("Voulez-vous vraiment supprimer cet article?")){
        document.location.href="./?delete="+ID;
    }
}

