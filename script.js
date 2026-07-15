document.addEventListener("DOMContentLoaded", function () {

    let buttons = document.querySelectorAll(".toggle");

    buttons.forEach(function(button){

        button.addEventListener("click", function(e){

            e.preventDefault();

            let form=this.parentElement;

            let formData=new FormData(form);

            fetch("toggle.php",{
                method:"POST",
                body:formData
            })

            .then(response=>response.text())

            .then(data=>{

                form.parentElement.previousElementSibling.innerHTML=data;

            });

        });

    });

});
