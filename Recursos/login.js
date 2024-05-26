function login(){
    var usuariosecre= "secretaria";
    var contraseña1 = 2345;

    var usuarioadmin= "administrador";
    var contraseña2 = 1234;

    var usuarioprofes= "profesional";
    var contraseña3 = 4567;

    var usuariogerente = "gerente";
    var contraseña4 = 9090;

    if (document.form.usuario.value == usuariosecre && document.form.contraseña.value == contraseña1) {
        
        alert ("BIENVENIDO AL SISTEMA SIF");
        window.location = "../secretaria/principalsecretaria.html"; 
    }
    
    if(document.form.usuario.value == usuarioadmin && document.form.contraseña.value == contraseña2){ 

        alert ("BIENVENIDO AL SISTEMA SIF");
        window.location = "../administrador/paginaprincipal.html"; 
    }

    if(document.form.usuario.value == usuarioprofes && document.form.contraseña.value == contraseña3){ 

        alert ("BIENVENIDO AL SISTEMA SIF");
        window.location = "../profesional/paginaprincipal.html"; 
    }

    if(document.form.usuario.value == usuariogerente && document.form.contraseña.value == contraseña4){ 

        alert ("BIENVENIDO AL SISTEMA SIF");
        window.location = "../gerente/paginaprincipal.html"; 
    }



}