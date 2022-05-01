using System.Collections;
using UnityEngine;
using UnityEngine.SceneManagement;

public class SceneRedirect : MonoBehaviour
{
    public void AsyncLoading(int _sceneID)
    {
        StartCoroutine(waitOnScene(_sceneID));
    }

    IEnumerator waitOnScene(int _sceneID)
    {
        AsyncOperation loadScene = SceneManager.LoadSceneAsync(_sceneID);

        while (!loadScene.isDone)
        {
            yield return null;
        }
    }
}
