window.addEventListener('toast', (event) => {
    var type_msg;
    var titre="Voilà";
    switch (event.detail[0].type) {
      case "error":
          type_msg=TOAST_STATUS.DANGER;
          titre="Oops";
        break;
        case "success":
          type_msg=TOAST_STATUS.SUCCESS;
        break;
        case "warning":
          type_msg=TOAST_STATUS.WARNING;
        break;
    }
    let toast = {
      title: titre,
      message: event.detail[0].message,
      status: type_msg,
      timeout: 3000
  }
  Toast.create(toast);
});