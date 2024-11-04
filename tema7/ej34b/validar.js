function envForm() {
    const usu = document.getElementById("usu").value;
    const pass = document.getElementById('pass').value;
    const res = xajax.request({ xjxfun: 'vUsuario' }, { mode: 'synchronous', parameters: [usu, pass] });
    //const res = xajax_vUsuario(usu, pass);
    if (res == false) alert("Credenciales Erróneas !!!");
    return res;
}
