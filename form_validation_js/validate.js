function validateForm() {
    // var fname = document.regform.firstname.value;
    // var lname = document.regform.lastname.value;
    // var dropdown = document.regform.subject.value;
    // var em = document.regform.email.value;
    // var pwd = document.regform.password.value;
    // var pno = document.regform.phone.value;
    // var mrks = document.regform.marks.value;
    // var per = document.regform.percentage.value;

    if (document.regform.firstname.value.match(/^[A-Za-z]+$/)) { }
    else{
        window.alert("Insert valid First Name");
        document.regform.firstname.focus();
        return false;
    }

    if (document.regform.email.value.match(/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/)) { }
    else{
        window.alert("Insert valid email");
        document.regform.email.focus();
        return false;
    }

    if (document.regform.password.value.length >= 5) {}
    else{
        window.alert("Password should be at least 5 words!! Enter valid password ");
        document.regform.password.focus();
        return false;
    }

    if (document.regform.phone.value.length == 10) {}
    else{
        alert("Please enter valid phone number.");
        document.regform.phone.focus();
        return false;
    }

    if ((document.regform.marks.value) >= 0 && (document.regform.marks.value <= 100)) {}
    else{
        alert("Please enter valid marks");
        document.regform.marks.focus();
        return false;
    }

    if (parseFloat(document.regform.percentage.value) >= 15 && parseFloat(document.regform.percentage.value) <= 100) {}
    else{
        alert("Please enter valid percentage");
        document.regform.percentage.focus();
        return false;
    }

    // if (dropdown.selectedIndex == -1) {
    //     alert("Please choose your course.");
    //     dropdown.focus();
    //     return false;
    // }

    return true;
}