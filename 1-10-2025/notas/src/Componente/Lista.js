import Estudiante from '../Estudiantes';
import './Lista.css';

function Lista({ listaEstudiante }) {
    return (
        <div className='lista'>
            <ol>
                {listaEstudiante.map((elemento, indice) => (
                <li><Estudiante nombre={elemento.nombre}
                    apellido={elemento.apellido}  telefono={elemento.telefono}/></li>
            ))}
            </ol>
        </div>
    )
}

export default Lista;