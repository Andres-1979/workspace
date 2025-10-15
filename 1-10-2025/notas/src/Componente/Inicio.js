import './Inicio.css'
import imagen from './minecraft.webp'

export function Home() {
    return (
        <>
            <h1>Inicio</h1>
        <div className='container'>
            <img src={imagen}/>
        </div>
        </>
    )
}