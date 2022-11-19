document.querySelector("#addButton").addEventListener("click", ()=>{
    document.querySelector("#task-save-btn").style.display = 'block';
    document.querySelector("#task-update-btn").style.display = 'none';
});


function editTask(id){
    document.querySelector("#task-save-btn").style.display = 'none';
    document.querySelector("#task-update-btn").style.display = 'block';

    document.querySelector("#product-id").value = id;
	console.log(id);

    $.ajax({
        type: "POST",
        url: '../php-scripts/scripts.php',
        data: {openTask : id},
        success: function (obj) {
            console.log(obj);
            document.getElementById('product-name').value                                    = obj[0];
            document.getElementById('product-amount').value                                  = obj[1];
            document.getElementById('product-date').value                                    = obj[2];
            document.getElementById('product-price').value                                   = obj[3];
            document.getElementById('product-description').value                             = obj[4];
            document.getElementById('product-image').value                                   = obj[5];

        }
    });

}


function deleteProduct(){
    if(confirm('Do you want To delete this Product : ') == true){
        document.querySelector("#buttonDelete").click();
    }
}
