import logo from './logo.svg';
import './App.css';
import estudiantes from './Estudiantes'
import Lista from './Componente/Lista';
import { Footer } from './Componente/Footer';


function App() {
  let estudiantes = [
    { nombre: "Thomas", apellido: 'Cano' },
    { nombre: "Daniel", apellido: 'Fonseca' },
    { nombre: "Jaider", apellido: 'Alvarez' },
    { nombre: "Nuno", apellido: 'Mendez' },
    { nombre: "Ousmane", apellido: 'Dembele' },
    { nombre: "James", apellido: 'Rodriguez' },
    { nombre: "Harry", apellido: 'Kane' },
    { nombre: "Dele", apellido: 'Alli' },

  ];


  return (
    <>
      <Lista listaEstudiante={estudiantes} />
      <Footer />
    </>
  );
}

export default App;
