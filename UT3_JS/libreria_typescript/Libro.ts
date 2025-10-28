
export class Libro{
    titulo:string;
    autor:string;
    precio:number;
    stock: number;

    constructor(titulo:string , autor:string , precio:number , stock : number){
            this.titulo = titulo ; 
            this.autor = autor ; 
            this.precio = precio ; 
            this.stock = stock; 
    }
}