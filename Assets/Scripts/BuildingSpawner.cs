using System.Collections;
using UnityEngine;

public class BuildingSpawner : MonoBehaviour
{
    public GameObject Buildings;

    void Start()
    {
        StartCoroutine(Spawner());
    }

    IEnumerator Spawner()
    {
        while (true)
        {
            yield return new WaitForSeconds(1.2f);
            
            float rand = Random.Range(2f, 5f);

            GameObject newBuilding = Instantiate(Buildings, new Vector3(7.1f,rand,0),Quaternion.identity);

            Destroy(newBuilding, 3);
        }
    }
}
