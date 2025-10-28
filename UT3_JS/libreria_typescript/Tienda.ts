import { Libro } from "./Libro";
import { Cliente } from "./Cliente";

export class Tienda {
    libros: Libro[];

    constructor(libros : Libro[]){
        this.libros = libros; 
    }


    public mostrarLibros():string {
        let str:string = " "

        for (let index = 0; index < this.libros.length; index++) {
            const element = this.libros[index];
            str = str + " libro : " + element.titulo + " precio : " + element.precio + " stock  : " + element.precio;
        
            
        }
        return str;  
       
    }




}
