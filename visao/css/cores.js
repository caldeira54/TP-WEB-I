const colors = (color) => {
  switch (color) {
    case 'preto1':
      return '#2a0308';
    case 'marrom':
      return '#924f1b';
    case 'amarelo':
      return '#e2ac3f';
    case 'bege':
      return '#f8ebbe';
    case 'ciano':
      return '#7ba58d';
    case 'branco':
      return '#f2f2f2';
    case 'azulClaro':
      return '#348e91';
    case 'azulEscuro':
      return '#1c5052';
    case 'cinza':
      return '#213635';
    case 'preto2':
      return '#0a0c0d';
    default:
      return color;
  }
};

export default colors;