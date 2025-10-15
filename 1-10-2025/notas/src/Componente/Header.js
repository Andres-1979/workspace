import './Header.css';
import { Link } from 'react-router-dom'

export function Header({ listaEstudiante }) {
    return (
        <div className='header'>
            <ol>
            LOGO
            </ol>
            <ul className='container-links'>
                <li>
                    <Link to='/'>Inicio</Link>
                </li>
                <li>
                    <Link to='/estudiantes'>Estudiantes</Link>
                </li>
            </ul>
        </div>
    )
}

