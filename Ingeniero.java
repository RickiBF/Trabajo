package Trabajo;

public class Ingeniero {
    public String nombre;

    public String genero;

    public String peso;

    public Ingeniero(String nom, String gen, String pes)
    {
        establecerNombre(nom);
        establecerGenero(gen);
        establecerPeso(pes);
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
    public String obtenerPeso()
    {
        return peso;
    }
    public void establecerPeso(String pes)
    {
        peso = pes;
    }
}
