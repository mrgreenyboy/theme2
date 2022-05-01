using System.Collections;
using System.Collections.Generic;
using UnityEngine;

public class VehiclesSpawner : MonoBehaviour
{
    public GameObject Vehicles;

    public Sprite s0;
    public Sprite s1;
    public Sprite s2;
    public Sprite[] images;

    void Start()
    {
        SetVehiclesPicture();
        StartCoroutine(Spawner());
    }

    void SetVehiclesPicture()
    {
        images = new Sprite[3];
        images[0] = s0;
        images[1] = s1;
        images[2] = s2;
    }

    IEnumerator Spawner()
    {
        while (true)
        {
            yield return new WaitForSeconds(1.2f);

            int num = Random.Range(0, images.Length);
            float rand = Random.Range(5f, 9f);

            Vehicles.GetComponent<SpriteRenderer>().sprite = images[num];
            Vehicles.GetComponent<SpriteRenderer>().tag = "Enemy";

            GameObject vehicles = Instantiate(Vehicles, new Vector3(7.1f, rand, 0), Quaternion.identity);

            Destroy(vehicles, 3);
        }
    }
}
