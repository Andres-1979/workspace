import Estudiante from '../Estudiantes'
import './Footer.css'

export function Footer({ infoFooter }) {
    return(
        <div className='footer'>
            {infoFooter?.map((elemento, indice) => (
                <>
                <h1>Footer</h1>
                <li><Estudiante nombre={elemento.nombre}
                    apellido={elemento.apellido}   /></li>
                <li><Estudiante 
                     telefono={elemento.telefono}  /></li>
                <li><Estudiante email={elemento.email} /></li>
                </>
            ))}
        </div>
    )
}