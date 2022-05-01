using UnityEngine;
using Unity.RemoteConfig;

public class VehiclesMove : MonoBehaviour
{
    public struct UserAttributes { }
    public struct AppAttributes { }

    public float Speed = 7;

    void Awake()
    {
        ConfigManager.FetchCompleted += SetEnemySpeed;
        ConfigManager.FetchConfigs<UserAttributes, AppAttributes>(new UserAttributes(), new AppAttributes());
    }

    void SetEnemySpeed(ConfigResponse response)
    {
        Speed = ConfigManager.appConfig.GetFloat("enemySpeed");
    }

    void Update()
    {
        transform.Translate(-Speed * Time.deltaTime, 0, 0);
    }
}
