forms = document.querySelectorAll('.delete-form');
if (forms) {
    forms.forEach(element => {
        element.querySelector('input[type="submit"]').addEventListener('click', (e)=>{
            e.preventDefault();
            if(window.confirm("Are You Sure Want To Delete This?")){
                element.submit();
            }
        });
    });
}