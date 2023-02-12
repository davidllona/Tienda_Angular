import { Component } from '@angular/core';
import { ActivatedRoute } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { Zapatilla } from '../models/zapatilla';
import Swal from 'sweetalert2';
import { cargar_js_miniaturas } from 'src/js/script';

@Component({
  selector: 'app-zapatilla-detalles',
  templateUrl: './zapatilla-detalles.component.html',
  styleUrls: ['./zapatilla-detalles.component.css']
})
export class ZapatillaDetallesComponent {

  titularAlerta:string="";

//obtener la id recibida y pedir al server los detalles de 
//dicha id

id_zapatilla:number = -1; 
zapatilla:Zapatilla = {} as Zapatilla;
mensaje:String = "";
cantidad:number = 1;
precio_final: number = 0;

constructor(private miServicio:MiServicioService, private activatedRoute:ActivatedRoute,){}

ngOnInit():void{
  this.id_zapatilla = Number(this.activatedRoute.snapshot.paramMap.get("id"));
  this.mensaje = "mostrar detalles del registro de id: " + this.id_zapatilla;
  this.miServicio.obtenerZapatillaPorId(this.id_zapatilla).subscribe(res => this.zapatilla = res);
  cargar_js_miniaturas();
}

agregar_producto_al_carrito():void{
  //llamar a una operacion del servicio de angular
  //para indicar al server que id de producto va al carrito

  //invocar al servicio de angular para que llame al agregarProductoCarrito.php
  //dandole la id del libro y la cantidad 
  this.miServicio.agregarAlCarrito(this.id_zapatilla,this.cantidad).subscribe(res => (res=="ok")
  ?Swal.fire(
    'Producto agregado al carrito', "La cantidad es: " + this.cantidad + ".",
    'success')
  :Swal.fire(
    'No se pudo agregar el producto al carrito',"",
    'error'));
  //de momento para comprobar que esta funcionando el carrito:
  //acceder a http://localhost:4200/server/obtenerLibrosCarrito.php
}

agregar_producto_a_favoritos():void{
  this.miServicio.agregarAFavoritos(this.id_zapatilla).subscribe(res => (res=="ok")
  ?Swal.fire(
    'Producto agregado a tu lista de favoritos', "",
    'success')
  :Swal.fire(
    'No se pudo agregar a tu lista de favoritos',"",
    'error'));
}


 calcularPrecioRebajado(precio_original: number, descuento:number){
   return precio_original - (precio_original * (descuento/100));
 }

}
