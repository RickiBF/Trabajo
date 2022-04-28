package Trabajo;

public class Planta {
    
    public String nombre;

    public String forma;

    public String textura;

    public Planta(String nom, String form, String tex)
    {
        establecerNombre(nom);
        establecerForma(form);
        establecerTextura(tex);
    }

    //nombre
    public String obtenerNombre()
    {
        return nombre;
    }

    public void establecerNombre(String nom)
    {
        nombre = nom;
    }

    //genero
    public String obtenerForma()
    {
        return forma;
    }

    public void establecerForma(String form)
    {
        forma=form;
    }

    //color
    public String obtenerTextura()
    {
        return textura;
    }
    public void establecerTextura(String tex)
    {
        textura = tex;
    }
}
