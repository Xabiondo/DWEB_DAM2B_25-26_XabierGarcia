var Empleado = /** @class */ (function () {
    function Empleado(nombre, edad, salario) {
        this.nombre = nombre;
        this.edad = edad;
        this.salario = salario;
    }
    Empleado.prototype.mostrarInfo = function () {
        var str = this.nombre + "  tiene  " + this.edad + "  y cobra  " + this.salario;
        return str;
    };
    Empleado.prototype.mostrarAnual = function () {
        return this.salario * 12;
    };
    return Empleado;
}());
