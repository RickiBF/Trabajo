package Trabajo;

public class Auto {

    public String precio;

    public String tamaño;

    public String color;

    public Auto (String pre, String tam, String col)
    {
        establecerPrecio(pre);
        establecerTamaño(tam);
        establecerColor(col);
    }

    //precio
    public String obtenerPrecio()
    {
        return precio;
    }

    public void establecerPrecio(String pre)
    {
        precio = pre;
    }

    //genero
    public String obtenerTamaño()
    {
        return tamaño;
    }

    public void establecerTamaño(String tam)
    {
        tamaño=tam;
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
