package Trabajo;

public class Animal {

    public String nombre;

    public String genero;

    public String color;

    public Animal(String nom, String gen, String col)
    {
        establecerNombre(nom);
        establecerGenero(gen);
        establecerColor(col);
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

    //color
    public String obtenerColor()
    {
        return color;
    }
    public void establecerColor(String col)
    {
        color = col;
    }


    
}
