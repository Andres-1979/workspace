import './Estudiante.css';

function Estudiante({nombre, apellido, telefono, email}){
        return(
            <div>
                <h1 className='nombre'> {nombre} {apellido}{telefono}{email}</h1>
            </div>
        )
            
        
}

export default Estudiante;