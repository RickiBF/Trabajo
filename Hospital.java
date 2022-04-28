package Trabajo;

public class Hospital {

    public String color;

    public String tamaño;

    public String especialidad;

    public Hospital(String col, String tam, String esp)
    {
        establecerColor(col);
        establecerTamaño(tam);
        establecerEspecialidad(esp);
    }

  
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
    public String obtenerEspecialidad()
    {
        return especialidad;
    }
    public void establecerEspecialidad(String esp)
    {
        especialidad = esp;
    }
    
}
