package Trabajo;

public class Abogado {
    public String nombre;

    public String genero;

    public String edad;

    public Abogado(String nom, String gen, String ed)
    {
        establecerNombre(nom);
        establecerGenero(gen);
        establecerEdad(ed);
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
    public String obtenerGenero()
    {
        return genero;
    }

    public void establecerGenero(String gen)
    {
        genero=gen;
    }

    //edad
    public String obtenerEdad()
    {
        return edad;
    }
    public void establecerEdad(String ed)
    {
        edad = ed;
    }
}
