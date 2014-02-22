function deleteOrder(id){
     $.post("delete_order.php",{id:id});
    id=document.getElementById(id);
    id.parentNode.removeChild(id);
    
} 
function addOrder(){
    var goods =  document.getElementById("goods").value;
    var count =  document.getElementById("count").value;
    var house =  document.getElementById("house").value;
    var groupe =  document.getElementById("groupe").value;
    
    $.post("new_order.php",{goods:goods,count:count,house:house,groupe:groupe},okey);
}
function okey(data){
    
}
