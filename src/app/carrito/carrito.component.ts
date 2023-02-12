import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { ZapatillaCarrito } from '../models/zapatillaCarrito';

@Component({
  selector: 'app-carrito',
  templateUrl: './carrito.component.html',
  styleUrls: ['./carrito.component.css']
})
export class CarritoComponent {

  zapatillasCarrito:ZapatillaCarrito[] = {} as ZapatillaCarrito[];

  constructor(private miServicio: MiServicioService, private router:Router){}

  ngOnInit():void{
    this.listarZapatillasCarrito();
  }

  listarZapatillasCarrito(){
    this.miServicio.obtenerZapatillasCarrito().subscribe(res => this.zapatillasCarrito = res);
    
  }

  vaciarCarrito(){
    this.miServicio.vaciarCarrito().subscribe( res => (res=="ok")?this.zapatillasCarrito=[]:alert("no pude vaciar el carrito") );
  }

  calcularPrecioRebajado(precio_original: number, descuento:number){
    return precio_original - (precio_original * (descuento/100));
  }

//   borrarProductoCarrito(index: number) {
//     this.zapatillasCarrito.splice(index, 1);
// }

}
