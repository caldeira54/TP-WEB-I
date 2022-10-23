const colors = (color) => {
    switch (color) {
      case 'preto':
        return '#2a0308';
      case 'marrom':
        return '#924f1b';
      case 'amarelo':
        return '#e2ac3f';
      case 'bege':
        return '#f8ebbe';
      case 'ciano':
        return '#7ba58d';
      default:
        return color;
    }
  };
  
  export default colors;