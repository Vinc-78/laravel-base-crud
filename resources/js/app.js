require('./bootstrap');

window.addEventListener("DOMContentLoaded", function(){
    
        const formsDelete = document.querySelectorAll(".form-delete");

        formsDelete.forEach(form => {
            form.addEventListener("submit",(e) =>{
                e.preventDefault();

                const Comic = document.getElementById("Comic").innerText
                const result = confirm("Sei sicuro di voler cancellare "+ Comic +"?")

                if(result){
                    form.submit();
                }
            })
            
        });
    
})