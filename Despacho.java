package Trabajo;

public class Despacho {
    
    
    public String nombre;

    public String oficinas;

    public String ubicacion;

    public Despacho(String nom, String ofi, String ubi)
    {
        establecerNombre(nom);
        establecerOficinas(ofi);
        establecerUbicacion(ubi);
    }


    public String obtenerNombre()
    {
        return nombre;
    }

    public void establecerNombre(String nom)
    {
        nombre = nom;
    }

    public String obtenerOficinas()
    {
        return oficinas;
    }

    public void establecerOficinas(String sec)
    {
        oficinas=sec;
    }


    public String obtenerUbicacion()
    {
        return ubicacion;
    }
    public void establecerUbicacion(String ubi)
    {
        ubicacion = ubi;
    }

}
