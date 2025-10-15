import logo from './logo.svg';
import './App.css';
import { Estudiante } from './Componente/Estudiante'
import Lista from './Componente/Lista';
import { Footer } from './Componente/Footer';
import { Header } from './Componente/Header';
import { Home } from './Componente/Inicio';
import { BrowserRouter, Routes, Route} from 'react-router-dom'


function App() {
  let estudiantes = [
    { nombre: "Thomas", apellido: 'Cano' },
    { nombre: "Daniel", apellido: 'Fonseca' },
    { nombre: "Jaider", apellido: 'Alvarez' },
    { nombre: "Nuno", apellido: 'Mendez' },
    { nombre: "Ousmane", apellido: 'Dembele' },
    { nombre: "James", apellido: 'Rodriguez' },
    { nombre: "Harry", apellido: 'Kane' },
    { nombre: "Dele", apellido: 'Alli',  },

  ];

  let info = [
    {
      nombre: 'Thomas', 
      apellido: 'Cano', 
      telefono: '3122916084', 
      email: 'thocano7@ielasnieves.edu.co'
    }
  ]


  return (
    <>   
    <BrowserRouter>
          <Header/>
          
      <Routes>
          <Route path='/' element={<Home/>} />
          <Route path='/estudiantes' element={<Lista listaEstudiante={estudiantes} />} />
      </Routes>
          <Footer  infoFooter={info} />
    </BrowserRouter>
    </>

  );
}

export default App;
