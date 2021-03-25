import React from 'react'

/* interface Shedule {
    foto: string;
    nome: string;
    atendomento: boolean;
} */

const SheduleList: React.FC<{
    foto: string;
    nome: string;
    atendomento: boolean;
}> = (Props)=>{

    return(
        <>
        <p>{Props.atendomento}</p>
        <p>{Props.foto}</p>
        <p>{Props.nome}</p>
        </>
    )

}