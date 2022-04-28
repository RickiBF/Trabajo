package Trabajo;

public class Fiscal {
    
    public String nombre;

    public String genero;

    public String direccion;

    public Fiscal(String nom, String gen, String dir)
    {
        establecerNombre(nom);
        establecerGenero(gen);
        establecerDireccion(dir);
    }

  
    public String obtenerNombre()
    {
        return nombre;
    }

    public void establecerNombre(String nom)
    {
        nombre = nom;
    }

    
    public String obtenerGenero()
    {
        return genero;
    }

    public void establecerGenero(String gen)
    {
        genero=gen;
    }

  
    public String obtenerDireccion()
    {
        return direccion;
    }
    public void establecerDireccion(String dir)
    {
        direccion = dir;
    }
}
