function validateMyForm()
{
    var form = document.getElementById("form");
    var firstName = document.getElementById("firstName");
    var lastName = document.getElementById("lastName");
    var email = document.getElementById("email");
    var pass1 = document.getElementById("password");
    var pass2 = document.getElementById("re-enterPassword");
    var gender = document.getElementById("gender");
    var errs = 0;

    if(!nameValidate(firstName.value))
    {
        firstName.style.border = "2px solid red";
        errs++;
    }else
    {
        firstName.style.border = "";
    }
    if(!nameValidate(lastName.value))
    {
        lastName.style.border = "2px solid red";
        errs++
    }else
    {
        lastName.style.border = "";
    }
 

    if(!passValidate(pass1.value, pass2.value))
    {
        pass1.style.border = "2px solid red";
        pass2.style.border = "2px solid red";
        errs++;
    }else
    {
        pass1.style.border = "";
        pass2.style.border = "";
    }

  
    if(errs == 0)
    {
    form.submit();

    }else
    {
        
    }
             
}


function nameValidate(name)
{

    var letters = /^[A-Za-z]+$/;
    if(name.match(letters))
    {
    return true;
    }
    else
    {
    return false;
    }
}

function passValidate(pass1, pass2)
{
    var err = 0;
    if(pass1 != pass2)
    {
        err++;
    }
    else if(pass1.length<8)
    {
        err++;
    }
    if(err == 0)
    {
        return true;
    }
    else 
    {
        return false;
    }
    
}

