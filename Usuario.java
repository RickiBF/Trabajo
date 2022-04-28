package Trabajo;

public class Usuario
{
    public String nombre;

    public String email;

    public String passwoard;

    public Usuario(String nom, String correo, String pass)
    {
        establecerNombre(nom);
        establecerEmail(correo);
        establecerPasswoard(pass);
    }

    public String obtenerNombre()
    {
        return nombre;
    }

    public void establecerNombre(String nom)
    {
        nombre = nom;
    }

    public void establecerEmail(String correo)
    {
        email=correo;
    }

    public void establecerPasswoard(String pass)
    {
        passwoard = pass;
    }

}