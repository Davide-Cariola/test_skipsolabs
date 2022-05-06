let form = document.querySelector('#form');

if(form){
    let submit_button = document.querySelector('#submit_button');
    let alert_message = document.querySelector('#alert_message');
    let company = document.querySelector('#company');
    let company_name = document.querySelector('#company_name');
    let company_description = document.querySelector('#company_description');

    company.addEventListener('change', ()=>{
        if(company.checked){
            company_name.classList.remove('d-none');       
            company_description.classList.remove('d-none');       
        } else {
            company_name.classList.add('d-none');       
            company_description.classList.add('d-none');
        }
    })

    submit_button.addEventListener('click', ()=>{
        let first_name = document.querySelector('#first_name').value
        let surname = document.querySelector('#surname').value;
        let username = document.querySelector('#username').value;
        let email = document.querySelector('#email').value;
        let street = document.querySelector('#street').value;
        let city = document.querySelector('#city').value;
        let zip_code = document.querySelector('#zip_code').value;
        let country = document.querySelector('#country').value;
        let company_name = document.querySelector('#company_name').value;
        let company_description = document.querySelector('#company_description').value;


        fetch('https://jsonplaceholder.typicode.com/users', {
            method: 'POST',
            body: JSON.stringify({
                first_name: first_name,
                surname: surname,
                username: username,
                email: email,
                address:{
                    street: street,
                    city: city,
                    zip_code: zip_code,
                    country: country,
                },
                company:{
                    company_name: company_name,
                    company_description: company_description,
                },
                userId: 1,
            }),
            headers: {
                'Content-type': 'application/json; charset=UTF-8',
            },
            })
            .then((response) => response.json())
            .then((json) => console.log(json));
                
        
            alert_message.classList.remove('d-none');
            form.reset();
        });

}


let show_user = document.querySelector('#show_user');

show_user.addEventListener('click', ()=>{
    fetch('https://jsonplaceholder.typicode.com/posts/1')
        .then((response) => response.json())
        .then((json) => console.log(json));
})