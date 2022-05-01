using UnityEngine;

public class BuildingMove : MonoBehaviour
{
    public float speed;

    void Update()
    {
        transform.Translate(-speed * Time.deltaTime, 0, 0);
    }
}
