import Estudiante from '../Estudiantes';
import './Lista.css';


export function lista({ listaEstudiante }) {
    return (
        <div className='lista'>
            <ol>
                {listaEstudiante.map((elemento, indice) => (
                <li><Estudiante nombre={elemento.nombre}
                    apellido={elemento.apellido} /></li>
            ))}
            </ol>
        </div>
    )
}

export default lista;