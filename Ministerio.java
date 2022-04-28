package Trabajo;

public class Ministerio {

    public String sector;

    public String tamaño;

    public String ubicacion;

    public Ministerio(String sec, String tam, String ubi)
    {
        establecerSector(sec);
        establecerTamaño(tam);
        establecerUbicacion(ubi);
    }


    public String obtenerSector()
    {
        return sector;
    }

    public void establecerSector(String sec)
    {
        sector = sec;
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
