
import styled from 'styled-components'


interface ButtonProp {
    tamanhoW: string;
    tamanhoH: string;

}
export const Button = styled.button`

width: ${(props:ButtonProp)=> props.tamanhoW || '' };
height: ${(props:ButtonProp)=> props.tamanhoH || '' };

background-color: #905090;

`