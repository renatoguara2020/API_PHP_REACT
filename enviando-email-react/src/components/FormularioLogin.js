

const FormularioLogin = () =>{


    return(

    <div className="container">
       <form className="form-login">
       <label className="form-label">Nome:</label>
       <input type="text" className="form-control" placeholder="Digite o seu Nome" name="nome"></input>
       <label className="form-label">Email:</label>
       <input type="email" className="form-control" placeholder="Digite seu E-mail" name="email"></input>
       <label className="form-label">Mensagem:</label>
       <textarea type="text" className="form-control" placeholder="Digite sua Mensagem" name="msg"></textarea><br></br>
       <button type="submit" className="btn btn-outline-success btn-lg">Login</button>
       
       </form>
    </div>
        
        
        );
}


export default FormularioLogin;