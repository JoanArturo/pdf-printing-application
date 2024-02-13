import { Component } from '@angular/core';
import { UserService } from './services/user.service';
import { saveAs } from 'file-saver';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.scss']
})
export class AppComponent {
  title = 'frontend';

  constructor(private userService: UserService) {}

  downloadPDF(): void {
    this.userService.downloadUserPDF().subscribe(
      response => {
        const blob = new Blob([response], { type: 'application/pdf' });

        /*
        // Abre una ventana del navegador para previsualización
        // del documento.
        const url = window.URL.createObjectURL(blob);
        window.open(url);
        */

        // Descargar automaticamente el documento
        saveAs(blob, 'reporte_de_usuario.pdf');
      }
    );
  }
}
