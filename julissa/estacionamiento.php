<?php

public class estacionamiento
{
private String placas[];
private int hora[];
private int minuto[];
public final int NO_EXISTE = -1;
public estacionamiento (int lugares)
{

placas = new String [lugares];
hora = new int [lugares];
minuto = new int [lugares];
//marca cada lugar vacio
for (int i = 0 ; i < placas.length ; i++)
placas [i] = "vacio";
} // fin public estacionamiento

public int localiza (String placa)
{
int lugar;
lugar = NO_EXISTE;
for (int i = 0 ; i < placas.length ; i++)
{
if (placas [i].compareTo (placa) == 0)
{
lugar = i;
break;
}
}
return lugar;
}

public void registra (int lugar, String placa, int horaEntrada, int minEntrada)
{
placas [lugar] = placa;
hora [lugar] = horaEntrada;
minuto [lugar] = minEntrada;
}

public int sale (int lugar, int horaSalida, int minSalida)
{
double tiempo;
placas [lugar] = "vacio";
tiempo = horaSalida + minSalida / (double) 60 - hora [lugar] - minuto [lugar] / (double) 60;
tiempo = Math.round (tiempo + 0.25); //redondea a la hora siguiente a los 15
return (int) tiempo;
}

public static void  presentaMenu ()
{
System.out.println ();
System.out.println ("MENU DE MANEJO DEL ESTACIONAMIENTO");
System.out.println ();
System.out.println ("1.- registra auto a la entrada");
System.out.println ("2.- localiza auto");
System.out.println ("3.- salida del auto");
System.out.println ("4- termina la ejecucion del programa");
}

public static void main(String[] args)
{
int tiempo;
new estacionamiento (15);
StdIn in = new StdIn();
int opcion, horas, minutos;
String placa;
final int SALIDA = -1;
opcion = 0;
while (opcion != SALIDA)
{
presentaMenu();
System.out.println ("Elige una opcion");
opcion = in.readInt();
switch (opcion)
{
case 1: //Localiza un lugar vacio
int lugar = localiza ("vacio");
if (lugar == NO_EXISTE)
System.out.println ("No hay cupo en el estacionamiento");
else
{ //Damos a conocer el lugar vacio y pide datos de registro
System.out.println ("El lugar a ocupar es: " + lugar);
System.out.println ("Dame placas");
placa = in.readString();
System.out.println ("Dame hora");
horas = in.readInt ();
System.out.println ("Dame minutos");
minutos = in.readInt ();
public  (lugar, placa, horas, minutos);
} //fin IF
break;
case 2:
//pedir datos
System.out.println ("Dame las placas");
placa = in.readString ();
//Localiza el lugar que ocupa el auto
lugar = localiza (placa);
//Maneja respuesta
if (lugar == NO_EXISTE)
System.out.println ("El auto no esta estacionado aqui");
else
System.out.println ("El auto esta en lugar: " + lugar);
break;
case 3:
//Pide placas
System.out.println ("Dame placas");
placa = in.readString ();
//Localiza lugar
lugar = localiza(placa);
if (lugar == NO_EXISTE)
System.out.println ("El auto no esta estacionado aqui");
else
{
System.out.println ("Dame hora de salida");
horaSalida = in.readInt ();
System.out.println ("Dame minuto de salida");
minSalida = in.readInt ();
tiempo = sale (lugar, horaSalida, minSalida);
int importe = tiempo* 10;
System.out.println ("El importe es: " + importe);
}
break;
case 4:
opcion = SALIDA;
break;
default:
System.out.println ("La opcion es invalida");
break;
} //fin switch
} //fin while
} //fin main
} // Estacionamiento class






?>