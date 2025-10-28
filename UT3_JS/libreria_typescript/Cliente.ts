import { Libro } from "./Libro";

export class Cliente{
    nombre : string ; 
    email : string ; 
    carrito : Libro[];

    constructor(nombre: string , email : string , carrito : Libro[]){
        this.nombre = nombre ; 
        this.email = email ; 
        this.carrito = carrito ; 
    }

    public añadirLibro(libro : Libro){
        let posicion:number =this.carrito.length -1 ;
        this.carrito.push(libro)

    }


}