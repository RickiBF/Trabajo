package Trabajo;

public class Casa {
    public String color;

    public String tamaño;

    public String precio;

    public Casa(String col, String tam, String pre)
    {
        establecerColor(col);
        establecerTamaño(tam);
        establecerPrecio(pre);
    }

    //nombre
    public String obtenerColor()
    {
        return color;
    }

    public void establecerColor(String col)
    {
        color = col;
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

    //edad
    public String obtenerPrecio()
    {
        return precio;
    }
    public void establecerPrecio(String pre)
    {
        precio = pre;
    }
}
