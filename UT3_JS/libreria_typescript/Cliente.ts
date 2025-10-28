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


}