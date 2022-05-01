using UnityEngine;
using UnityEngine.UI;

public class ModalActions : MonoBehaviour
{
    public GameObject ModalCanvas;
    public GameObject ModalUsernameField;

    public void ChangeActiveCanvas()
    {
        if (ModalCanvas.activeInHierarchy)
        {
            ModalCanvas.SetActive(false);
        }
        else
        {
            ModalCanvas.SetActive(true);
            ModalUsernameField.GetComponent<InputField>().text = PlayerPrefs.GetString("username");
        }
       
    }
}
