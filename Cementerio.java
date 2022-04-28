package Trabajo;

public class Cementerio {
    
    public String color;

    public String tamaño;

    public String ubicacion;

    public Cementerio(String col, String tam, String ubi)
    {
        establecerColor(col);
        establecerTamaño(tam);
        establecerUbicacion(ubi);
    }


    public String obtenerColor()
    {
        return color;
    }

    public void establecerColor(String col)
    {
        color = col;
    }

    public String obtenerTamaño()
    {
        return tamaño;
    }

    public void establecerTamaño(String tam)
    {
        tamaño=tam;
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
