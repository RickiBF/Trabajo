package Trabajo;

public class Fabrica {

    public String nombre;

    public String sectores;

    public String ubicacion;

    public Fabrica(String nom, String sec, String ubi)
    {
        establecerNombre(nom);
        establecerSectores(sec);
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

    public String obtenerSectores()
    {
        return sectores;
    }

    public void establecerSectores(String sec)
    {
        sectores=sec;
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
