import { Component } from '@angular/core';
import { Router } from '@angular/router';
import { MiServicioService } from '../mi-servicio.service';
import { Zapatilla } from '../models/zapatilla';
import { ZapatillaFavorito } from '../models/zapatillaFavorito';

//Sweet Alert
import swal from'sweetalert2';

@Component({
  selector: 'app-favorito',
  templateUrl: './favorito.component.html',
  styleUrls: ['./favorito.component.css']
})
export class FavoritoComponent {

  titularAlerta:string="";
  zapatillasFavorito:ZapatillaFavorito[] = {} as ZapatillaFavorito[];

  constructor(private miServicio: MiServicioService, private router:Router){}

  ngOnInit():void{
    this.listarZapatillasFavorito();
  }

  listarZapatillasFavorito(){
    this.miServicio.obtenerZapatillasFavoritos().subscribe(res => this.zapatillasFavorito = res);
    
  }

  vaciarFavorito(){
    this.miServicio.vaciarFavoritos().subscribe( res => (res=="ok")?this.zapatillasFavorito=[]:alert("no pude vaciar el carrito") );
  }


  calcularPrecioRebajado(precio_original: number, descuento:number){
   return precio_original - (precio_original * (descuento/100));
 }






}
